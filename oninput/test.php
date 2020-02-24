<html>
<head></head>
<body>
<input id="A">
<input id="B">
<script type="text/javascript">
A.onblur = function() {
  B.value = this.value;
};

</script>
</body>
</html