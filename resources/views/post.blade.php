<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Boolpress</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </head>
   <body>
      <table class="table">
        <thead>
          <tr>
               <th scope="col">Titolo</th>
               <th scope="col">Autore</th>
               <th scope="col">Categoria</th>
               <th scope="col">Descrizione</th>
               <th scope="col">Tag</th>
               @if (Auth::check())
                  <a href="{{route('post.create')}}">Crea un nuovo post</a>
               @endif
          </tr>
        </thead>
        <tbody>
           @foreach($posts as $post)
             <tr>
                <td>{{ $post->title}}</td>
                <td>{{ $post->author}}</td>
                <td>{{ $post->post_cat->title}}</td>
                <td>{{ $post->post_post_info->description}}</td>
                <td>
                   @foreach ($post->post_tag as $tag)
                     {{$tag->name}}
                   @endforeach
                </td>
                   <td><a href="{{route('post.show', $post->id)}}">Dettagli post</a></td>
                <td>
                   @if (Auth::check())
                     <form action="{{route('post.destroy', $post->id)}}" method="POST">
                        @CSRF
                        @method('DELETE')
                        <button type="submit">Elimina post</button>
                     </form>
                   @endif
               </td>
               @if (Auth::check())
                  <td><a href="{{route('post.edit', $post->id)}}">Modifica post</a></td>
               @endif
             </tr>
           @endforeach
        </tbody>
      </table>
   </body>
</html>
