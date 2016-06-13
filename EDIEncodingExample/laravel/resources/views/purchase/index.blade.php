@extends("template.master")
@section("content")
   <h1>Purchase Order 850</h1>
   <hr>
   @for($i=1;$i<=33;$i++)
     <?php $line="line$i";?>	{{--set column name--}}
      <article>
         <div class="body">
            {{$purchase[0]->$line}}
         </div>
      </article>
   @endfor
@stop