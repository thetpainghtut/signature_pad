<x-app-layout>
<title>Laravel Signature Pad Tutorial Example - ItSolutionStuff.com </title>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
  
<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<style>
        
        table,th, td{
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        th, td{
            padding: 15px;
        }
       
        
        

        div#img-box{
        border:3px solid #000;
        width:500px;
        }

        div#btn-box{
        position: fixed;
        bottom :0px;
        }
        
        .kbw-signature { width: 100%; height: 180px;}
        #signaturePad canvas{
        width: 100% !important;
        height: auto;
        }
 
    </style>
        

    </head>
    <body  >
            
        <div class=" block mt-4 ml-4 mr-4">
            <table class="table-auto mt-4 ml-4 ">
                <x-jet-label for="checklistselection" value="{{ __('チェックリスト選択') }}" />
                
               <label class="block">
                    <select  class="form-select mt-1 block w-full" onchange="window.location.href=this.options[this.selectedIndex].value;">
                        <option></option>
                        <option value="{{ route('checklistjoin') }}">入会</option>
                        <option value="{{ route('checklistsummer') }}">夏期講習</option>
                        <option value="{{ route('checklistwinter') }}">退会</option>
                        <option value="{{ route('checklistleave') }}">冬期講習</option>


                    </select>
                </label>
            </table>

        </div>
        <!--<div class="mt-4 ml-4">
            <x-jet-dropdown-link href="{{ route('searchanything') }}" >{{ __('checklistsummer')}}
            </x-jet-dropdown-link>
        </div>  --> 
        <div>

            <table class="table-auto mt-4 ml-4">
                <thead>
                    <tr>
                        <th px-1 py-2 >ジャンル</th>
                        <th px-1 py-2 >チェック</th>
                        <th px-1 py-2 >No</th>
                        <th px-4 py-2 >確認事項</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-2 py-2" >入会</td>
                        <td class="border px-1 py-2 "><x-jet-checkbox id="check" class="flex-item-center " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">1</td>
                        <td class="border px-4 py-2">入会申込書【プランについて】説明がありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="flex-item-center " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">2</td>
                        <td class="border px-4 py-2">入会申込書【振替について】説明がありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">3</td>
                        <td class="border px-4 py-2">入会申込書【テストターボ】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">4</td>
                        <td class="border px-4 py-2">入会申込書【ITTO模試】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">5</td>
                        <td class="border px-4 py-2">入会申込書【クーリングオフ】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">6</td>
                        <td class="border px-4 py-2">入会申込書【解約】説明ありました。（40日前の申請必要です。）.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">7</td>
                        <td class="border px-4 py-2">連絡【メールの登録について】説明がありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">8</td>
                        <td class="border px-4 py-2">連絡【教室運営・講師アンケートの回答のお願い】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">9</td>
                        <td class="border px-4 py-2">口座振替【用紙記入orキャッシュカード登録】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">10</td>
                        <td class="border px-4 py-2">通塾経路【内容】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">11</td>
                        <td class="border px-4 py-2">必要教材【教材】説明ありました。（ノート、学校の教科書、ワークについて）.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">12</td>
                        <td class="border px-4 py-2">支払【初回授業料支払（授業料は2か月分）：クレジット】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">13</td>
                        <td class="border px-4 py-2">初回【初回授業日・持ち物】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">14</td>
                        <td class="border px-4 py-2">季節講習【春・夏・冬】説明がありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">15</td>
                        <td class="border px-4 py-2">※季節講習【受験までのスケジュール】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">16</td>
                        <td class="border px-4 py-2">その他【自習・コモリ】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">17</td>
                        <td class="border px-4 py-2">その他【塾のルール】説明がありました。（スマホ持ち込み使用禁止・飲食禁止等）.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">18</td>
                        <td class="border px-4 py-2">【スクレポ登録について】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">19</td>
                        <td class="border px-4 py-2">確認【提出書類】説明ありました.</td>
                    </tr>

                    <tr>
                        <td class="border px-2 py-2">入会</td>
                        <td class="border px-1 py-2"><x-jet-checkbox id="check" class="block mt-1 " type="checkbox" required autofocus /></td>
                        <td class="border px-1 py-2">20</td>
                        <td class="border px-4 py-2">Please fill the data.</td>
                    </tr>
                
                </tbody>
                        
                    

            </table>

                
            </div>
            <br><h2>説明がありましたら、　チェックにレをお願いします。</h2>
                

        <!--    <div class="table mt-4 ml-28">
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

                                    <x-jet-button class="ml-4" onclick="chgImg()" value="1">
                                {{ __('画像変換') }}
                                </x-jet-button>
                                </div>

                                <x-jet-label for="outputimg" value="{{ __('画像出力') }}" />

                                <div id="img-box"><img id="newImg"></div>
                                
                                <x-jet-button class="ml-4" onclick="chgImg()" value="1">
                                {{ __('Save') }}
                                </x-jet-button>
                                
                                <script src="{{asset('js/test.js')}}"></script>


                        
        
                
          
        </div>-->
        
        
<html>





<div class="container">
<div class="row">
<div class="col-md-6 offset-md-2 mt-5">



@if ($message = Session::get('success'))
<div class="alert alert-success  alert-dismissible">
<button type="button" class="close" data-dismiss="alert">×</button>  
<strong>{{ $message }}</strong>
</div>
@endif
<form method="POST" action="{{ url('laravel-signature-pad') }}">
@csrf

<div class="table mt-4 ml-1">
                <x-jet-label for="tname" value="{{ __('Student Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"  required autofocus />
            </div>

            <div class="table mt-4 ml-1">
                <x-jet-label for="parentname" value="{{ __('Student Parent Name') }}" />
                <x-jet-input id="parentname" class="block mt-1 w-full" type="text" name="parentname"  required autofocus />
            </div>

            <div class="table mt-4 ml-1">
                <x-jet-label for="branchname" value="{{ __('Branch Name') }}" />
                <x-jet-input id="branchname" class="block mt-1 w-full" type="text" name="branchname"  required autofocus />
            </div>
        

<div class="col-md-12">
<label class="" for="">Signature:</label>
<br/>
<div id="signaturePad" ></div>
<br/>

   <!--<canvas id="canvassample" width="600" height="300"></canvas> -->
   
<button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>

<textarea id="signature64" name="signed" style="display: none"></textarea>
</div>
<br/>
<button class="btn btn-success">Save</button>
</form>


</div>
</div>
</div>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
<script type="text/javascript">



var signaturePad = $('#signaturePad').signature({syncField: '#signature64', syncFormat: 'PNG'});
$('#clear').click(function(e) {
e.preventDefault();
signaturePad.signature('clear');
$("#signature64").val('');
$("#signaturePad").touch();
});
</script>
</body>
</html>
        
    
   
</x-app-layout>
