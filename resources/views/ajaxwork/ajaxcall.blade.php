<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
<script type="text/javascript">

    $(document).ready(function() {

        $('select[name="department"]').on('change', function() {

            var departmentID = $(this).val();

            if(departmentID) {

                $.ajax({

                    url: '/myform/ajax/'+departmentID,

                    type: "GET",

                    dataType: "json",

                    success:function(data) {


                        

                        $('select[name="designation"]').empty();

                        $.each(data, function(key, value) {

                            $('select[name="designation"]').append('<option value="'+ key +'">'+ value +'</option>');

                        });


                    }

                });

            }else{

                $('select[name="designation"]').empty();

            }

        });

    });
    

</script>