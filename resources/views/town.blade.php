@extends('layouts.app')


@section('content')

    <div class="row justify-content-center">
        @auth
        <div class="col-md-4">
            <div class="links select-wrapper">
                <label for="county">County</label>
                <select name="county" id="county" class="select-style">
                </select>

                <div class="input-wrapper" style="display:none;">
                    <label for="townName">Add town</label>
                    <input name="townName" id="town-name" placeholder="Write the town name here."><button class="add-town">Add town</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="list list-wrapper" style="display:none;">
                <ol>
                </ol>
            </div>
        </div>
        @endauth
        @guest
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Unauthenticated user') }}</div>

                    <div class="card-body">
                        <a href="/login">{{ __('Please login here to use this service') }}</a>
                    </div>
                </div>
            </div>
        @endguest
    </div>
)
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                type: "GET",
                url: "/county",
                success:function(countyData) {
                    var select = $('#county');
                    select.append($("<option></option>").attr("value", '').text('Choose a county'));
                    $.each(countyData, function() {
                        $.each(this, function(key, value) {
                            select.append($("<option></option>").attr("value", value.id).text(value.name));
                        });
                    });
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                    console.log(errorMsg);
                }
            });

            const getTownsByCountyId = function (countyId) {
                $.ajax({
                    type: "GET",
                    url: "town/"+countyId,
                    success:function(townData) {
                        var select = $('.list');
                        select.append('<span class="county-title">County: '+$("#county option:selected").text()+'</span>')
                        select.append("<ol>");
                        var list = $("div.list.list-wrapper > ol");
                        $.each(townData, function() {
                            $.each(this, function(key, value) {
                                list.append($("<li></li>").addClass("town-"+value.id).text(value.name));
                            });
                        });
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                        console.log(errorMsg);
                    }
                });
            }

            const addTown = function (countyId,name) {
                $.ajax({
                    type: "GET",
                    url: "inserttown/countyid/"+countyId+"/name/"+name,
                    success:function(data) {
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                        console.log(errorMsg);
                    }
                });
            }

            const addTownByJson = function (countyId,name) {
                $.ajax({
                    type: "POST",
                    url: "addtownbyjson",
                    data: '{ "countyId": "'+countyId+'", "name": "'+name+'" }',
                    contentType: 'application/json',
                    processData: false,
                    success:function(data) {
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                        console.log(errorMsg);
                    }
                });
            }

            const updateTown = function (id,name) {
                $.ajax({
                    type: "GET",
                    url: "updatetown/id/"+id+"/name/"+name,
                    success:function(data) {
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                        console.log(errorMsg);
                    }
                });
            }

            const updateTownByJson = function (id,name) {
                $.ajax({
                    type: "GET",
                    url: "updatetown/id/"+id+"/name/"+name,
                    data: '{ "id": "'+id+'", "name": "'+name+'" }',
                    contentType: "application/json",
                    processData: false,
                    success:function(data) {
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                        console.log(errorMsg);
                    }
                });
            }

            const removeTown = function (id) {
                $.ajax({
                    type: "GET",
                    url: "deletetown/id/"+id,
                    success:function(data) {
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        var errorMsg = 'Ajax request failed: ' + xhr.responseText;
                        console.log(errorMsg);
                    }
                });
            }

            $(document).on ("click", "div.list li", function(){
                if (!$(this).data('edit')) {
                    value = $( this ).text();
                    name = $(this).attr('class');
                    $( this ).replaceWith( "<li class="+$(this).attr('class')+" data-edit="+'true'+"><input name="+$(this).attr('class')+" value="+value+"><button class="+'update'+">Update</button><button class="+'remove'+">Remove</button><button class="+'cancel'+">Cancel</button></li>" );
                    $('input[name="'+name+'"]').val(value);
                }
            });

            $(document).on ("click", "button.cancel", function(){
                text = $(this).parent().find('input[name='+$(this).parent().attr("class")+']').val();
                $( this ).parent().replaceWith( "<li class="+$(this).parent().attr("class")+">"+text+"</li>" );
            });

            $(document).on ("click", "button.update", function(){
                name = $(this).parent().find('input[name='+$(this).parent().attr("class")+']').val();
                id = $(this).parent().find('input[name='+$(this).parent().attr("class")+']').attr("name");
                townId = id.split("-");
                updateTownByJson(townId[1],name)
                $('.list').empty();
                getTownsByCountyId($("#county").val());
            });

            $(document).on ("click", "button.remove", function(){
                id = $(this).parent().find('input[name='+$(this).parent().attr("class")+']').attr("name");
                townId = id.split("-");
                removeTown(townId[1])
                $('.list').empty();
                getTownsByCountyId($("#county").val());
            });

            $(document).on ("click", "button.add-town", function(){
                addTownByJson($("#county").val(),$("#town-name").val());
                $('.list').empty();
                getTownsByCountyId($("#county").val());
            });

            $("select").change(function(){
                if ($(this).val() === '') {
                    $('.list').hide();
                    $('.input-wrapper').hide();
                } else {
                    $('.list').empty();
                    getTownsByCountyId($(this).val());
                    $('.list').show();
                    $('.input-wrapper').show();
                }
            });
        });

    </script>


@endsection