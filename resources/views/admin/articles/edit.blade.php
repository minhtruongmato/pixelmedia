@extends('admin.articles.base')

@section('action-content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-slug">Cập Nhật sản phẩm</h3>
                        @if(Session::has('error'))
                            <p class="alert {{ Session::get('alert-class', 'alert-warning') }}">{{ Session::get('error') }}</p>
                        @endif
                    </div>

                    <div class="box-body">
                        <form action="{{ route('bai-viet.update', ['bai_viet' => $article->id]) }}" method="post" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @include('admin.articles.form', [
                                    'title_vi' => $langData['title_vi'], 'title_en' => $langData['title_en'],
                                    'description_vi' => $langData['description_vi'], 'description_en' => $langData['description_en'],
                                    'content_vi' => $langData['content_vi'], 'content_en' => $langData['content_en'],
                                    'detail' => $article->detail, 'image' => $article->image, 'slug' => $article->slug,
                                    'categories' => $customCategories
                                ])
                            <input type="hidden" name="id_lang" value="{{$ids}}">
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
