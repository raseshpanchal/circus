<script>
    $(document).ready(function(){
        var mainCatName=localStorage.getItem("maincat");
        var subCatName=localStorage.getItem("subcat");

        $.ajax({
            url:"wizardDataSkills.php",
            method:"POST",
            data:{mainCat:mainCatName, subCat:subCatName},
            success:function(data){
                $('.filterSkills').html(data);
            }
        });
        return false;
    });
</script>

<div class="filterSkills">

</div>
