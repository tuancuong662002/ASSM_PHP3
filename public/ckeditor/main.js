const {
    ClassicEditor,
    Autoformat,
    AutoImage,
    AutoLink,
    Autosave,
    BlockToolbar,
    Bold,
    CKBox,
    CKBoxImageEdit,
    CloudServices,
    Code,
    CodeBlock,
    Emoji,
    Essentials,
    GeneralHtmlSupport,
    Heading,
    HtmlComment,
    HtmlEmbed,
    ImageBlock,
    ImageCaption,
    ImageInline,
    ImageInsert,
    ImageInsertViaUrl,
    ImageResize,
    ImageStyle,
    ImageTextAlternative,
    ImageToolbar,
    ImageUpload,
    Italic,
    Link,
    LinkImage,
    List,
    ListProperties,
    Mention,
    Paragraph,
    PasteFromOffice,
    PictureEditing,
    ShowBlocks,
    Table,
    TableCaption,
    TableCellProperties,
    TableColumnResize,
    TableProperties,
    TableToolbar,
    TextTransformation
} = window.CKEDITOR;

const LICENSE_KEY = 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3NDU4ODQ3OTksImp0aSI6IjQyNGI1ZDgxLTc1MmItNDM1Yy04Zjc1LWIyNTIxN2YwNzZjZCIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjgzODBmNjZlIn0.yYeFt1afwdv5TwYTRwQu4SYw-VczVeaka5a7Q4SpRe1VtlqQqwKWmph5qayZpkoWW2Cr1DwFOpDkRWDOWogUXQ'; // giữ nguyên nếu bạn cần dùng CKBox hoặc CloudServices

const CLOUD_SERVICES_TOKEN_URL =
    'https://lcw1_402axuu.cke-cs.com/token/dev/c616d4041d1a38f517f9e706c43027baf6bf54ccf76325fff18d781c0172?limit=10';

const editorConfig = {
    toolbar: {
        items: [
            '|',
            'showBlocks',
            '|',
            'heading',
            '|',
            'bold',
            'italic',
            'code',
            '|',
            'emoji',
            'link',
            'insertImage',
            'ckbox',
            'insertTable',
            'codeBlock',
            'htmlEmbed',
            '|',
            'bulletedList',
            'numberedList'
        ],
        shouldNotGroupWhenFull: false
    },
    plugins: [
        Autoformat,
        AutoImage,
        AutoLink,
        Autosave,
        BlockToolbar,
        Bold,
        CKBox,
        CKBoxImageEdit,
        CloudServices,
        Code,
        CodeBlock,
        Emoji,
        Essentials,
        GeneralHtmlSupport,
        Heading,
        HtmlComment,
        HtmlEmbed,
        ImageBlock,
        ImageCaption,
        ImageInline,
        ImageInsert,
        ImageInsertViaUrl,
        ImageResize,
        ImageStyle,
        ImageTextAlternative,
        ImageToolbar,
        ImageUpload,
        Italic,
        Link,
        LinkImage,
        List,
        ListProperties,
        Mention,
        Paragraph,
        PasteFromOffice,
        PictureEditing,
        ShowBlocks,
        Table,
        TableCaption,
        TableCellProperties,
        TableColumnResize,
        TableProperties,
        TableToolbar,
        TextTransformation
    ],
    blockToolbar: [
        '|',
        'bold',
        'italic',
        '|',
        'link',
        'insertImage',
        'insertTable',
        '|',
        'bulletedList',
        'numberedList'
    ],
    cloudServices: {
        tokenUrl: CLOUD_SERVICES_TOKEN_URL
    },
    heading: {
        options: [
            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
            { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
            { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
            { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
            { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
        ]
    },
    htmlSupport: {
        allow: [{ name: /^.*$/, styles: true, attributes: true, classes: true }]
    },
    image: {
        toolbar: [
            'toggleImageCaption',
            'imageTextAlternative',
            '|',
            'imageStyle:inline',
            'imageStyle:wrapText',
            'imageStyle:breakText',
            '|',
            'resizeImage',
            '|',
            'ckboxImageEdit'
        ]
    },
    licenseKey: LICENSE_KEY,
    link: {
        addTargetToExternalLinks: true,
        defaultProtocol: 'https://',
        decorators: {
            toggleDownloadable: {
                mode: 'manual',
                label: 'Downloadable',
                attributes: {
                    download: 'file'
                }
            }
        }
    },
    list: {
        properties: {
            styles: true,
            startIndex: true,
            reversed: true
        }
    },
    mention: {
        feeds: [
            {
                marker: '@',
                feed: []
            }
        ]
    },
    
    table: {
        contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
    }
};

ClassicEditor.create(document.querySelector('#editor'), editorConfig);
