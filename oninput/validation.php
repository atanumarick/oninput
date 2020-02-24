<html>
 <head></head>
 <body>
 Title <input id="title"> <br />
URL <input id="url">
 </body>
 <script>
 $('#title').on('keyup', function (e) {   
   //alert("key up");
   e.preventDefault();
   var str = $(this).val();
   str = str.replace(/\W+(?!$)/g, '-').toLowerCase();
   str = str.replace(/\W$/, '').toLowerCase();
   $('#url').val(str);
});
 </script>
</html>