
<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Laravel Signature Pad Tutorial Example - ItSolutionStuff.com </title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
  
 <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<style>
.kbw-signature { width: 100%; height: 180px;}
#signaturePad canvas{
width: 100% !important;
height: auto;
}
</style>
</head>
<body class="bg-dark">
<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3 mt-5">
<div class="card">
<div class="card-header">

</div>
<div class="card-body">
@if ($message = Session::get('success'))
<div class="alert alert-success  alert-dismissible">
<button type="button" class="close" data-dismiss="alert">×</button>  
<strong>{{ $message }}</strong>
</div>
@endif
<form method="POST" action="{{ url('laravel-signature-pad') }}">
@csrf


{{-- <div class="table mt-4 ml-28">
                <x-jet-label for="stname" value="{{ __('Student Name') }}" />
                <x-jet-input id="stname" class="block mt-1 w-full" type="text" name="stname"  required autofocus />
            </div>

            <div class="table mt-4 ml-28">
                <x-jet-label for="stparent" value="{{ __('Student Parent Name') }}" />
                <x-jet-input id="stparent" class="block mt-1 w-full" type="text" name="stparent"  required autofocus />
            </div>
                            <p class= "mt-4 "> *については必要に応じてご説明いたします。 </p>


                            <canvas id="canvassample" width="600" height="300"></canvas>
                                <div style="padding:10px">
                                    <x-jet-button class=" bg-gray-100 ml-4 hover:text-gray-100" onclick="clearCanvas()">
                                {{ __('リセット') }}
                                </x-jet-button>

                                    <x-jet-button class="ml-4" onclick="prevCanvas()">
                                {{ __('戻る') }}
                                </x-jet-button>

                                    <x-jet-button class="ml-4" onclick="nextCanvas()">
                                {{ __('進む') }}
                                </x-jet-button>

                                    <x-jet-button class="ml-4" onclick="chgImg()" value="">
                                {{ __('画像変換') }}
                                </x-jet-button>
                                </div>

                                <x-jet-label for="outputimg" value="{{ __('画像出力') }}" />

                                <div id="img-box"><img id="signaturePad"></div>
                                
                                <x-jet-button class="ml-4" onclick="saveImg()" value="">
                                {{ __('Save') }}
                                </x-jet-button>
                                
                                <script src="{{asset('js/test.js')}}"></script>


         </div> --}}
         <div class="table mt-4 ml-28">
                <x-jet-label for="tname" value="{{ __('Student Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus />
            </div>

            <div class="table mt-4 ml-28">
                <x-jet-label for="parentname" value="{{ __('Student Parent Name') }}" />
                <x-jet-input id="parentname" class="block mt-1 w-full" type="text" name="parentname"  required autofocus />
            </div>

            <div class="table mt-4 ml-28">
                <x-jet-label for="branchname" value="{{ __('Branch Name') }}" />
                <x-jet-input id="branchname" class="block mt-1 w-full" type="text" name="branchname"  required autofocus />
            </div>
        
<div class="col-md-12">
<label class="" for="">Signature:</label>
<br/>
<div id="signaturePad" ></div>
<br/>
<button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
<textarea id="signature64" name="signed" style="display: none"></textarea>
</div>
<br/>
<button class="btn btn-success">Save</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>-->
<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<script type="text/javascript">

var signaturePad = $('#signaturePad').signature({syncField: '#signature64', syncFormat: 'PNG'});
$('#clear').click(function(e) {
e.preventDefault();
signaturePad.signature('clear');
$("#signature64").val('');

});
</script>
</body>
</html>

