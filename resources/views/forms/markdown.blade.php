@extends('layout.master')
@section('title', 'Markdown')
@section('parentPageTitle', 'Forms')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Markdown Editor</h2>
            </div>
            <div class="body">                            
                <p class="margin-bottom-30">Markdown editing meet Bootstrap</p>
                <textarea id="markdown-editor" name="markdown-content" data-provide="markdown" rows="10"></textarea>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')

    $(function() {
        // markdown editor
        var initContent = '<h4>Hello there</h4> ' +
            '<p>How are you? I have below task for you :</p> ' +
            '<p>Select from this text... Click the bold on THIS WORD and make THESE ONE italic, ' +
            'link GOOGLE to google.com, ' +
            'test to insert image (and try to tab after write the image description)</p>' +
            '<p>Test Preview And ending here...</p> ' +
            '<p>Click "List"</p> Enjoy!';

        $('#markdown-editor').text(toMarkdown(initContent));
    });
    
@stop