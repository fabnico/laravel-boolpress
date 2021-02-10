
     <div>Titolo del post: {{ $post->title}}</div>
     <div>Autore: {{ $post->author}}</div>
     <div>Categoria: {{ $post->post_cat->title}}</div>
     <div>Descrizione: {{ $post->post_post_info->description}}</div>
     <div>
        Tag:
           @foreach ($post->post_tag as $tag)
             {{$tag->name}}
           @endforeach
     <div>
