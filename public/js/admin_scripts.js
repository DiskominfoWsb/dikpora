var editorKu = CKEDITOR.replace('post-content', {
    height: 465,
    removePlugins: 'easyimage',
    filebrowserUploadMethod: 'form',
    //filebrowserBrowseUrl: 'http://localhost/dpupr/public/upload/media',
    //filebrowserUploadUrl: 'https://codetoner.site/project/dpupr/public/upload/image-file-editor/upload',
    filebrowserUploadUrl: 'http://localhost/dikpora/public/upload/image-file-editor/upload',
    /**
    removeButtons: 'Save,NewPage,ExportPdf,Preview,Print,Templates,SelectAll,Form,Checkbox,Radio,TextField,Textarea,' +
        'Button,ImageButton,HiddenField,Select,Iframe,PageBreak,About,ShowBlocks,Language,Anchor,CopyFormatting,RemoveFormat'
     */
    toolbarGroups: [
        { name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
        { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
        { name: 'links' },
        { name: 'insert' },
        '/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
        { name: 'styles' },
        { name: 'colors' },
        { name: 'mode' }
    ],
    removeButtons: 'Language',
});

$('.date-picker').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
});

$('.comment-reply').click(function(){
    var myHref  = $(this).attr('href');
    myHref      = myHref.split('-');
    var type    = myHref[1];
    var id      = myHref[2];
    var id_p    = myHref[3];
    var sender  = $('#comment-name-'+id).html();
    var message = $('#comment-message-'+id).html();

    $('#type').val(type);
    $('#id').val(id);
    $('#id_p').val(id_p);
    $('#modalComment form div p:first-child').html(sender);
    $('#modalComment form div p:nth-child(2)').html(message.substring(0,115) + ' ...');
});

$('.msg-reply').click(function(){
    var id      = $(this).attr('href');
    id          = id.replace('#msg-', '');
    var sender  = $('#msg-name-'+id).html();
    var message = $('#msg-message-'+id).html();
    var comment = $('#msg-comment-'+id).html();

    $('#id').val(id);
    $('#modalComment form div p:first-child').html(sender);
    $('#modalComment form div p:nth-child(2)').html(message.substring(0,115) + ' ...');
    $('#comment').val(comment);
});

$('#tambahLink').click(function(){
    var newLink = $('.external-link').last().clone();
    $('#siteIdentity').before(newLink);
});

$('.editUser').click(function(){
    var href = $(this).attr('href');
    href     = href.split('-');
    var ID   = href[1];
    var id   = href[2];
    //start ajax
    var baseUrl = $('#my-base-url').val();
    $.ajax({
        url     : baseUrl+'/user/edit',
        method  : 'POST',
        data    : { ID: ID, id: id },
        success : function(data) {
            data = JSON.parse(data);
            $('#editID').val(data.ID);
            $('#editEmail').val(data.email);
            $('#editUsername').val(data.username);
            $('#editName').val(data.full_name);
            $('#editPlace').val(data.birth_place);
            $('#editDate').val(data.birth_date);
            $('#editLevel').val(data.level).select();
        },
        error   : function(){
            alert('Koneksi bermasalah!');
        }
    });
});