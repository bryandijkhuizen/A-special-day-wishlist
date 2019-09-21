<!-- JQUERY VOOR DE DROP & DRAG  !-->


<script type="text/javascript">
    $(".row_position").sortable({
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('.row_position>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    });


    function updateOrder(data) {
        $.ajax({
            url: "scripts/drop_drag_ajax.php",
            type: 'post',
            data: {
                position: data
            },

        })
    }
</script>
</body>

</html>