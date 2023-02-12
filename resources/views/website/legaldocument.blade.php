
@extends("layouts.master")

@section('content')

   <!-- Breadcrumb area Start -->
   <section class="page-title-area bg-image ptb--80" data-bg-image="website/images/page-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Legal Documents</h1>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="current"><span>Legal Documents</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<main class="main-content-wrapper">
    <div class="inner-page-content">
        <!-- Services Area Start -->
        <section class="services-area legal-document-area ptb--60">
            <div class="container">
                <div class="gallery-view">
                    <div class="row" id="lightgallery"> 
                        <div class="item col-md-4" data-src="website/images/legal-document-1.jpg" data-sub-html="<h4>Legal Document</h4>">
                            <a href="">
                                <img src="website/images/legal-document-1.jpg" alt="Legal Document"/>
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                        <div class="item col-md-4" data-src="website/images/legal-document-2.jpg" data-sub-html="<h4>Legal Document</h4>">
                            <a href="">
                                <img src="website/images/legal-document-2.jpg" alt="Legal Document"/>
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                        <div class="item col-md-4" data-src="website/images/legal-document-3.jpg" data-sub-html="<h4>Legal Document</h4>">
                            <a href="">
                                <img src="website/images/legal-document-3.jpg" alt="Legal Document"/>
                                <i class="fa fa-expand"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
    </div>
</main>
<!-- Main Content Wrapper End -->

        @endsection
