<script src="/js/raphael.min.js"></script>
<script src="/js/morris.min.js"></script>    
<script>
  Morris.Donut({
  element: 'donut-example',
  data: [
    @foreach ($counts as $count)
    {label: "{{ $count->county }}", value: {{ $count->count }}},
    @endforeach
  ]
});
</script>
