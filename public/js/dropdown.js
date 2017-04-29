//$("#depertment").change(function(event){
//    $.get("teachers/"+event.target.value+"",function(response,depertment){
//    for(i=0; i<response.length; i++){
//          $("#teacher").append("<option value='"+response[i].id+"'>"+response[i].name+"</option"); 
//        }
//    });
//  });

//$("#depertment").change(event=>{
//    $.get('teachers/${event.target.value}', function(res, dept){
//        $("#teacher").empty();
//        res.forEach(element => {
//            $("#teacher").append('<option value=${res.id}> ${res.name} </option>');
//        });
//    });
//});


//function getTeacher(val) {
//	$.ajax({
//	type: "POST",
//	url: "get_teacher.php",
//	data:'depertment_id='+val,
//	success: function(data){
//		$("#teacher").html(data);
//	}
//	});
//}
//
//function selectDepertment(val) {
//$("#search-box").val(val);
//$("#suggesstion-box").hide();
//}


//        $(function () {
//
//            // Get IDs for countries and cities
//            var depertment_id = {{ old('depertment', $author->city->country->id) }};
//            var teacher_id = {{ old('teacher', $author->city->id) }};
//
//            // Country select
//            $('#depertment').val(depertment_id).prop('selected', true);
//            // Sync of cities
//            cityUpdate(country_id);
//
//            // Country change event
//            $('#depertment').on('change', function (e) {
//                var depertment_id = e.target.value;
//                teacher_id = false;
//                teacherUpdate(depertment_id);
//            });
//
//            // Ajax Request for cities
//            function teacherUpdate(depertmentId) {
//                $.get('{{ url('teachers') }}/' + depertmentId + "'", function (data) {
//                    $('#teacher').empty();
//                    $.each(data, function (index, teachers) {
//                        $('#city').append($('<option>', {
//                            value: teachers.id,
//                            text: teachers.name
//                        }));
//                    });
//                    if (teachers_id) {
//                        $('#teachers').val(teachers_id).prop('selected', true);
//                    }
//                });
//            }
//
//        });
$(function () {

            // Get IDs for countries and cities
            

//            // Country select
//            $('#depertment').val(depertment_id).prop('selected', true);
//            // Sync of cities
//            teacherUpdate(depertment_id);
//
//            // Country change event
//            $('#depertment').on('change', function (e) {
//                var depertment_id = e.target.value;
//                teacher_id = false;
//                teacherUpdate(depertment_id);
//            });
//
//            // Ajax Request for cities
//            function teacherUpdate(depertmentId) {
//                $.get('{{ url('teachers') }}/' + depertmentId + "'", function (data) {
//                    $('#teacher').empty();
//                    $.each(data, function (index, teachers) {
//                        $('#city').append($('<option>', {
//                            value: teachers.id,
//                            text: teachers.name
//                        }));
//                    });
//                    if (teachers_id) {
//                        $('#teacher').val(teachers_id).prop('selected', true);
//                    }
//                });
//            }
//
//        });
    
   

