<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>print task </title>
</head>
<body>
   
      @foreach ($tasks1 as $task=>$valu)
          <ol>
             <li>
                   <a href="{{'show/'. $task}}">{{$task}}</a>
            </li>
          </ol>
      @endforeach

</body>
</html>