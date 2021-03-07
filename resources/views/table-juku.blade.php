
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        
        table,th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 15px;
        }
       
        
        canvas {
            position: relative;
            border:3px solid #000;
        }

        div#img-box{
        border:3px solid #000;
        width:500px;
        }

        div#btn-box{
        position: fixed;
        bottom :0px;
        }
        
        

        </style>
        

    </head>
    <body style="background-color: #eff7e1;" >
                  
        <div>
            <br><h4>説明がありましたら、　チェックにレをお願いします。</h4>
                <table border='1' >
                    <thead>
                        <tr>
                        <th>ジャンル</th>
                        <th>チェック</th>
                        <th>No</th>
                        <th>確認事項</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">1</td>
                        <td>入会申込書【プランについて】説明がありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">2</td>
                        <td>入会申込書【振替について】説明がありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">3</td>
                        <td>入会申込書【テストターボ】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</th>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">4</td>
                        <td>入会申込書【ITTO模試】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">5</td>
                        <td>入会申込書【クーリングオフ】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">6</td>
                        <td>入会申込書【解約】説明ありました。（40日前の申請必要です。）.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">7</tdh>
                        <td>連絡【メールの登録について】説明がありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">8</td>
                        <td>連絡【教室運営・講師アンケートの回答のお願い】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">9</td>
                        <td>口座振替【用紙記入orキャッシュカード登録】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">10</td>
                        <td>通塾経路【内容】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">11</td>
                        <td>必要教材【教材】説明ありました。（ノート、学校の教科書、ワークについて）.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">12</td>
                        <td>支払【初回授業料支払（授業料は2か月分）：クレジット】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">13</td>
                        <td>初回【初回授業日・持ち物】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">講習</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">14</td>
                        <td>季節講習【春・夏・冬】説明がありました.</td>
                        </tr>
                        <tr>
                        <td align="center">講習</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">15</td>
                        <td>※季節講習【受験までのスケジュール】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">その他</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">16</td>
                        <td>その他【自習・コモリ】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">その他</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">17</td>
                        <td>その他【塾のルール】説明がありました。（スマホ持ち込み使用禁止・飲食禁止等）.</td>
                        </tr>
                        <tr>
                        <td align="center">その他</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">18</td>
                        <td>【スクレポ登録について】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">確認</td>
                        <td align="center"><input type="checkbox" ></td>
                        <td align="center">19</td>
                        <td>確認【提出書類】説明ありました.</td>
                        </tr>
                        <tr>
                        <td align="center">入会</td>
                        <td align="center"><input type="checkbox" ></th>
                        <td align="center">20</td>
                        <td>Please fill the data.</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr >
                            <td  colspan="4">
                                <p align="right"> *については必要に応じてご説明いたします。 </p>


                                <canvas id="canvassample" width="600" height="300"></canvas>
                                <div style="padding:10px">
                                    <button type="button" style="background-color: gray" onclick="clearCanvas()">リセット</button>
                                    <button type="button" style="background-color: gray" onclick="prevCanvas()">戻る</button>
                                    <button type="button" style="background-color: gray" onclick="nextCanvas()">進む</button>
                                </div>
                                <div style="padding:10px">
                                    <button type="button" style="background-color: gray" onclick="chgImg()" value="1">画像変換</button>
                                </div>
                                <h2>画像出力<h2> 
                                <div id="img-box"><img id="newImg"></div>
                                
                                <script src="{{asset('js/test.js')}}"></script>


                            </td> 
                        </tr>
                    </tfoot>
                </table>
                
            </div>
        </div>
        

        
    </body>
</html>
