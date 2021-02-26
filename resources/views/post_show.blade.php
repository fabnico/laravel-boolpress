
     <div><strong>Titolo del post: </strong> {{ $post->title}}</div>
     <div><strong>Autore: </strong>  {{ $post->author}}</div>
     <div><strong>Categoria: </strong>  {{ $post->postToCat->title}}</div>
     <div><strong>Descrizione: </strong>  {{ $post->postToInfo->description}}</div>
     <div>
        <strong>Tag: </strong> 
           @foreach ($post->postToTag as $tag)
             {{$tag->name}}
           @endforeach
     <div>
