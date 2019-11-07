<script type="text/javascript">
    $(".row_position").sortable({ //zorgt ervoor dat de tabel te verslepen valt.
        delay: 150,
        stop: function() { //als er wordt gestopt met sorteren / slepen dan wordt deze functie uitgevoerd.
            var selectedData = new Array(); // nieuwe array wordt aangemaakt.
            $('.row_position>tr').each(function() { //.row_position is de class name van de rijen.
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData); //functie die de database updatetet
        }
    });

    function updateOrder(data) {
        $.ajax({
            url: "scripts/drop_drag_ajax.php", //hier wordt <-- dat script aangeroepen met een post request waarin de array (selectedData) wordt meegegeven als postition. 
            type: 'post',
            data: {
                position: data
            },

        })
    }
</script>
</body>

</html>