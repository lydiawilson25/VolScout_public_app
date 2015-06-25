@extends("layout")
@section("content")
<title>Project Coordinator Home Page</title>

<h1>Welcome! </h1></head>

<body>
<p> {{ HTML::linkRoute('pendsvlist', 'Site Visit Requests To be Approved')}} </p>
<p> {{ HTML::linkRoute('addnewproj', 'Add New Projects')}} </p>
</body>
@stop
@section("footer")
@parent
@stop
