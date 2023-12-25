
{!! Form::hidden($name, null, ['id' => 'mySingleField']) !!}

<ul id="singleFieldTags"></ul>

@section('js2')
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset-fonts/reset-fonts.css">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/base/base-min.css">
  <link href="/tagit/_static/subpage.css" rel="stylesheet" type="text/css">
  <link href="/tagit/_static/examples.css" rel="stylesheet" type="text/css">
  <!-- /ignore -->
  <link href="/tagit/css/jquery.tagit.css" rel="stylesheet" type="text/css">
  <link href="/tagit/css/tagit.ui-zendesk.css" rel="stylesheet" type="text/css">     
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="/tagit/js/tag-it.js" type="text/javascript" charset="utf-8"></script>

  <script>
  $(function(){
      var sampleTags = ['c++', 'java', 'php', 'coldfusion', 'javascript', 'asp', 'ruby', 'python', 'c', 'scala', 'groovy', 'haskell', 'perl', 'erlang', 'apl', 'cobol', 'go', 'lua'];
      $('#singleFieldTags').tagit({
          availableTags: sampleTags,
          // This will make Tag-it submit a single form value, as a comma-delimited field.
          singleField: true,
          singleFieldNode: $('#mySingleField')
      });
  });
  </script>
@endsection

