<div id="app-4">
  <ol>
    <li v-for="todo in todos">
      <?php echo todo.text; ?>
    </li>
  </ol>
</div>
<script src="dependency/js/vue.js"></script>
<script type="text/javascript">
    var app4 = new Vue({
      el: '#app-4',
      data: {
        todos: [
          { text: 'Learn JavaScript' },
          { text: 'Learn Vue' },
          { text: 'Build something awesome' }
        ]
      }
    })
</script>