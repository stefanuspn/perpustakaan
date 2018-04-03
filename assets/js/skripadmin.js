 

 var table = $("#lookup").dataTable();
// Prevent bootstrap dialog from blocking focusin
$(document).on('focusin', function(e) {
    if ($(e.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
    }
});


tinyMCE.init({
        selector: ".richtext",
        height: 150,
        
        theme: 'modern',
        plugins: 'advlist print preview fullpage paste searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample code table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker imagetools  contextmenu colorpicker textpattern help',

   codesample_languages: [
        {text:'HTML/XML',value:'markup'},
        {text:"XML",value:"xml"},
        {text:"HTML",value:"html"},
        {text:"mathml",value:"mathml"},
        {text:"SVG",value:"svg"},
        {text:"CSS",value:"css"},
        {text:"Clike",value:"clike"},
        {text:"Javascript",value:"javascript"},
        {text:"ActionScript",value:"actionscript"},
        {text:"apacheconf",value:"apacheconf"},
        {text:"apl",value:"apl"},
        {text:"applescript",value:"applescript"},
        {text:"asciidoc",value:"asciidoc"},
        {text:"aspnet",value:"aspnet"},
        {text:"autoit",value:"autoit"},
        {text:"autohotkey",value:"autohotkey"},
        {text:"bash",value:"bash"},
        {text:"basic",value:"basic"},
        {text:"batch",value:"batch"},
        {text:"c",value:"c"},
        {text:"brainfuck",value:"brainfuck"},
        {text:"bro",value:"bro"},
        {text:"bison",value:"bison"},
        {text:"C#",value:"csharp"},
        {text:"C++",value:"cpp"},
        {text:"CoffeeScript",value:"coffeescript"},
        {text:"ruby",value:"ruby"},
        {text:"d",value:"d"},
        {text:"dart",value:"dart"},
        {text:"diff",value:"diff"},
        {text:"docker",value:"docker"},
        {text:"eiffel",value:"eiffel"},
        {text:"elixir",value:"elixir"},
        {text:"erlang",value:"erlang"},
        {text:"fsharp",value:"fsharp"},
        {text:"fortran",value:"fortran"},
        {text:"git",value:"git"},
        {text:"glsl",value:"glsl"},
        {text:"go",value:"go"},
        {text:"groovy",value:"groovy"},
        {text:"haml",value:"haml"},
        {text:"handlebars",value:"handlebars"},
        {text:"haskell",value:"haskell"},
        {text:"haxe",value:"haxe"},
        {text:"http",value:"http"},
        {text:"icon",value:"icon"},
        {text:"inform7",value:"inform7"},
        {text:"ini",value:"ini"},
        {text:"j",value:"j"},
        {text:"jade",value:"jade"},
        {text:"java",value:"java"},
        {text:"JSON",value:"json"},
        {text:"jsonp",value:"jsonp"},
        {text:"julia",value:"julia"},
        {text:"keyman",value:"keyman"},
        {text:"kotlin",value:"kotlin"},
        {text:"latex",value:"latex"},
        {text:"less",value:"less"},
        {text:"lolcode",value:"lolcode"},
        {text:"lua",value:"lua"},
        {text:"makefile",value:"makefile"},
        {text:"markdown",value:"markdown"},
        {text:"matlab",value:"matlab"},
        {text:"mel",value:"mel"},
        {text:"mizar",value:"mizar"},
        {text:"monkey",value:"monkey"},
        {text:"nasm",value:"nasm"},
        {text:"nginx",value:"nginx"},
        {text:"nim",value:"nim"},
        {text:"nix",value:"nix"},
        {text:"nsis",value:"nsis"},
        {text:"objectivec",value:"objectivec"},
        {text:"ocaml",value:"ocaml"},
        {text:"oz",value:"oz"},
        {text:"parigp",value:"parigp"},
        {text:"parser",value:"parser"},
        {text:"pascal",value:"pascal"},
        {text:"perl",value:"perl"},
        {text:"PHP",value:"php"},
        {text:"processing",value:"processing"},
        {text:"prolog",value:"prolog"},
        {text:"protobuf",value:"protobuf"},
        {text:"puppet",value:"puppet"},
        {text:"pure",value:"pure"},
        {text:"python",value:"python"},
        {text:"q",value:"q"},
        {text:"qore",value:"qore"},
        {text:"r",value:"r"},
        {text:"jsx",value:"jsx"},
        {text:"rest",value:"rest"},
        {text:"rip",value:"rip"},
        {text:"roboconf",value:"roboconf"},
        {text:"crystal",value:"crystal"},
        {text:"rust",value:"rust"},
        {text:"sas",value:"sas"},
        {text:"sass",value:"sass"},
        {text:"scss",value:"scss"},
        {text:"scala",value:"scala"},
        {text:"scheme",value:"scheme"},
        {text:"smalltalk",value:"smalltalk"},
        {text:"smarty",value:"smarty"},
        {text:"SQL",value:"sql"},
        {text:"stylus",value:"stylus"},
        {text:"swift",value:"swift"},
        {text:"tcl",value:"tcl"},
        {text:"textile",value:"textile"},
        {text:"twig",value:"twig"},
        {text:"TypeScript",value:"typescript"},
        {text:"verilog",value:"verilog"},
        {text:"vhdl",value:"vhdl"},
        {text:"visualbasic.net",value:"visualbasic.net"},
        {text:"wiki",value:"wiki"},
        {text:"YAML",value:"yaml"}
    ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | responsivefilemanager |  codesample | code | emoticons | hr link image emoticons",

        codesample_dialog_width: '400',
        codesample_dialog_height: '400',
        codesample_content_css: "https://ourcodeworld.com/material/css/prism.css",

        external_filemanager_path: "../assets/filemanager/",
        filemanager_title: "File Manager",
        external_plugins: {
            "filemanager": "../filemanager/plugin.min.js"
        }
    });


function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);
 
    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                   
                }    
            }

$(document).ready(function (e) {
    $("#form-save").on('submit',(function(e) {
        tinymce.triggerSave();
        e.preventDefault();
        $.ajax({
            url: "bukuajax.php?action=insert",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
             $(".modal").modal("hide");   
            $("#view").html(data);
            },
            error: function() 
            {
                alert("gagal");
            }           
       });
    }));
});

function form_edit(id){
   $('#ModalEditBuku form')[0].reset();
   $.ajax({
      url : "bukuajax.php?action=form_data&id_buku="+id,
      type : "GET",
      dataType : "JSON",
      success : function(data){
         $('#ModalEditBuku').modal('show');
         $('.modal-title').text('Edit Buku');

         $('#id_buku').val(data.id_buku).attr('readonly',true);
         $('#judul').val(data.judul);
         $('#pengarang').val(data.pengarang);
         $('#penerbit').val(data.penerbit);
         $('#tahun_terbit').val(data.tahun_terbit);
         $('#isbn').val(data.isbn);
         $('#jumlahbuku').val(data.jumlahbuku);
         $('#file').val(data.file);
         $('#lokasi').val(data.lokasi);
      },
      error : function(){
         alert("Tidak dapat menampilkan data!");
      }
   });
}

function delete_data(id){
   if(confirm("Apakah yakin data akan dihapus?")){
      $.ajax({
         url : "bukuajax.php?action=delete&id_buku="+id,
         type : "GET",
         success : function(data){
             window.location.href = "buku";
         },
         error : function(){
            alert("Tidak dapat menghapus data!");
         }
      });
   }
}

$(document).ready(function (e) {
    $("#form-edit").on('submit',(function(e) {
        tinymce.triggerSave();
        e.preventDefault();
        $.ajax({
            url: "bukuajax.php?action=update",
            type: "POST",
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data)
            {
             $("#ModalEditBuku").modal("hide");   
            $("#view").html(data);
            },
            error: function() 
            {
                alert("gagal");
            }           
       });
    }));
});