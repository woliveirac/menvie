
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function() {
    var _PeopleFunctions = function (){

        var deletePerson = function(person_id,btnObj) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/delete",
                data: {person_id: person_id},
                cache: false,
                beforeSend: function () {
                    btnObj.prop('disabled',true);
                },
                success: function(data){
                    if(data.msg == 'success') {
                        $('#people_table').find('tr[data-person-id="'+person_id+'"]').remove();
                    }else{
                        alert('Um erro ocorreu internamente, por favor, tente novamente.');
                    }
                    btnObj.prop('disabled',false);
                }
            });
        };

        return {
            deletePerson: deletePerson
        }
    };

    PeopleFunctions = _PeopleFunctions();
});

