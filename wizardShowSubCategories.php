<script>
    $(document).ready(function(){
        var mainCatName=localStorage.getItem("maincat");

        $.ajax({
            url:"wizardDataSubCategories.php",
            method:"POST",
            data:{mainCat:mainCatName},
            success:function(data){
                $('.filterSubCat').html(data);
            }
        });
        return false;
    });
</script>

<div class="filterSubCat">

</div>


