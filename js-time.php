
<span id='time'>00:00:00</span><br>

<script>
setInterval("showtime(O('time'))", 1000)

function O(obj)
{
  if (typeof obj == 'object') return obj
  else return document.getElementByld(obj)
}

function showtime(object)
{
  var date = new Date()
  object.innerHTML = date.toTimeString().substr(0,8)
}
</script>
