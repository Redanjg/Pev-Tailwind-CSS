@extends('layouts.default')
@section('ext-css')
@endsection
@section('content')
    {{-- <section id="content" class="py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h1>{{ $materi->name }}</h1>
                </div>
                <div class="col-md-10">
                    <iframe src="https://pevs-id.com/storage/materi-seminar/{{ $materi->id }}/{{ $materi->file }}"
                        style="min-height: 80vh;"></iframe>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="content" class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-md-3 my-2"></div>
                <div class="col-md-6 my-2">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>{{ $materi->name }}</h1>
                        </div>
                        <div class="col-12 mt-2 mb-2">
                            <div class="row align-items-center">
                                <div class="col-4 my-2">
                                    <input type="number" name="topage" id="topage" class="form-control"
                                        placeholder="To Page" min="1" value="1">
                                </div>
                                <div class="col-auto my-2">
                                    <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-2 mb-2">
                            <div class="d-grid">
                                <button id="prev" class="btn btn-primary btn-block">Previous</button>
                            </div>
                        </div>
                        <div class="col-6 mt-2 mb-2">
                            <div class="d-grid">
                                <button id="next" class="btn btn-primary btn-block">Next</button>
                            </div>
                        </div>
                        <div class="col-12 mt-2 mb-2 text-center">
                            <canvas id="canvas-pdf" class="w-100">

                            </canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2"></div>
            </div>
        </div>
    </section>
@endsection
@section('add-js')
    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.14.305/build/pdf.min.js"></script>
    <script>
        var url = "https://pevs-id.com/storage/materi-seminar/{{ $materi->id }}/{{ $materi->file }}";
        var pdfjsLib = window['pdfjs-dist/build/pdf'];

        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdn.jsdelivr.net/npm/pdfjs-dist@2.14.305/build/pdf.worker.js';

        var pdfDoc = null,
            pageNum = 1,
            pageRendering = true,
            pageNumPending = null,
            scale = 1,
            canvas = document.getElementById('canvas-pdf'),
            ctx = canvas.getContext('2d');

        function renderPage(num) {
            pageRendering = true;
            pdfDoc.getPage(num).then(function(page) {
                var viewport = page.getViewport({
                    scale: scale
                });
                canvas.height = viewport.height;
                canvas.width = viewport.width;
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };
                var renderTask = page.render(renderContext);

                renderTask.promise.then(function() {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            });
            $('#topage').attr('max', pdfDoc.numPages)
            document.getElementById('page_num').textContent = num;
        }

        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                console.log(num)
                renderPage(num);
            }
        }

        function onPrevPage() {
            if (pageNum <= 1) {
                return;
            }
            pageNum--;
            $('#topage').val(pageNum);
            queueRenderPage(pageNum);
        }
        document.getElementById('prev').addEventListener('click', onPrevPage);

        function onNextPage() {
            if (pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            $('#topage').val(pageNum);
            queueRenderPage(pageNum);
        }
        document.getElementById('next').addEventListener('click', onNextPage);

        function skipPage(val) {
            if (val > pdfDoc.numPages) {
                return;
            }
            pageNum = val;
            queueRenderPage(pageNum);
        }
        $('#topage').attr('max')
        $('#topage').focusout(function() {
            let val = $(this).val()
            if (val < 1) {
                $(this).val(1);
                return;
            }
            skipPage(Number(val));
        })

        pdfjsLib.getDocument(url).promise.then(function(pdfDoc_) {
            pdfDoc = pdfDoc_;
            document.getElementById('page_count').textContent = pdfDoc.numPages;
            renderPage(pageNum);
        });
    </script>
@endsection
