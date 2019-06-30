<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #county {
	display: block;
	font-size: 16px;
	font-family: sans-serif;
	font-weight: 700;
	color: #444;
	line-height: 1.3;
	padding: .6em 1.4em .5em .8em;
	width: 100%;
	max-width: 100%;
	box-sizing: border-box;
	margin: 0;
	border: 1px solid #aaa;
	box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
	border-radius: .5em;
	-moz-appearance: none;
	-webkit-appearance: none;
	appearance: none;
	background-color: #fff;
	background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
	  linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
	background-repeat: no-repeat, repeat;
	background-position: right .7em top 50%, 0 0;
	background-size: .65em auto, 100%;
    width:100%;
}
#county::-ms-expand {
	display: none;
}
#county:hover {
	border-color: #888;
}
#county:focus {
	border-color: #aaa;
	box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
	box-shadow: 0 0 0 3px -moz-mac-focusring;
	color: #222;
	outline: none;
}
#county option {
	font-weight:normal;
}
input {
    border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
    width:100%;
    display:block;
    padding-top:10px;
}
.add-town {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.update, .remove, .cancel {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-right: 1px;
}
label[for=county],label[for=townName] {
    float: left;
    margin-left: auto;
    font-size: x-large;
    font-family: monospace;
    margin-top:10px;
    margin-bottom:5px;
}

.list-wrapper ol li {
    float: left;
    margin-left: auto;
    font-size: x-large;
    font-family: monospace;
    margin-top:10px;
    margin-bottom:5px;
    width: 350px;
    text-align: left;
    margin-left: 45px;
}

.list-wrapper span {
    float: left;
    margin-left: 20px;
    font-size: x-large;
    font-family: monospace;
    margin-top:10px;
    margin-bottom:5px;
    width: 90%;
    text-align: -webkit-auto;
}

.list-wrapper ol {
    counter-reset: li; /* Initiate a counter */
    list-style: none; /* Remove default numbering */
    *list-style: decimal; /* Keep using default numbering for IE6/7 */
    font: 15px 'trebuchet MS', 'lucida sans';
    padding: 0;
    margin-bottom: 4em;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

            div.main-wrapper       { width: 900px; position: relative; }
            div.main-wrapper div   { height:300px; float: left; }
            div.select-wrapper          {  width: 370px; background-color: #cccccc; margin:5px; padding: 10px;}
            div.list-wrapper           { width:470px;background-color: #31ff0552; overflow-y:auto; margin:5px;}
            div.clear         { clear: both; }
            .county-title { color:black; font-size:600; font-weight:bold;}
        </style>
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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <div class="links">
                        <a href="https://laravel.com/docs">Docs</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://blog.laravel.com">Blog</a>
                        <a href="https://nova.laravel.com">Nova</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
                <div class="main-wrapper">
                    <div class="links select-wrapper">
                        <label for="county">County</label>
                        <select name="county" id="county" class="select-style">
                        </select>
                        
                        <div class="input-wrapper" style="display:none;">
                            <label for="townName">Add town</label>
                            <input name="townName" id="town-name" placeholder="Write the town name here."><button class="add-town">Add town</button>
                        </div>
                    </div>
                    <div class="list list-wrapper" style="display:none;">
                        <ol>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
