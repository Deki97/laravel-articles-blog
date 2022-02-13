{{-- File che viene visualizzato al caricamento della pagina home --}}
@extends('layouts.app')

{{-- Tramite lo yield definito in app.blade.php posso cambiare il titolo per ogni pagina (views) --}}
 @section('page_title')
 Home
 @endsection

 {{-- Anche qui tramite lo yield il contenuto del main viene diversificato per ogni pagina --}}
@section('main_section')
    <div class="container">
        <div class="articles">
            @foreach ($articles as $article)
            <div class="single-article">
                <div class="top-article">
                    <div class="article-image">
                        <img src="{{ $article->image_url }}" alt="{{ $article->title }}">
                    </div>
                </div>

                <div class="bottom-article">
                    <div class="article-title">
                        <h2>
                            {{ $article->title }}
                        </h2>
                    </div>

                    <div class="article-preview">
                        {{ $article->preview }}
                    </div>

                    <div class="article-details">
                        <div class="article-topic">
                            {{ $article->topic }}
                        </div>
    
                        <div class="article-publish-date">
                            {{ $article->publish_date }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection