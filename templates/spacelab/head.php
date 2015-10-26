<head>
    <meta charset="utf-8" />
    <title><?php echo $this->page->getTitle(); ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/spacelab/bootstrap.min.css">
    <link rel="stylesheet" href="http://tobiju.github.io/share/prismjs/prism.css" />
    <script src="http://tobiju.github.io/share/prismjs/prism.js"></script>

    <style>
        *, html {
            font-family: 'Lato', sans-serif;
            font-weight: 400;
        }

        /* Global Rules */

        .container {
            /*background: #ddd;*/
        }

        .clearfix {
            clear: both;
        }

        .rtrim {
            padding-right: 0px;
        }

        .ltrim {
            padding-left: 0px;
        }

        /* Header Section */

        header {
            border-bottom: 1px solid #ddd;
            background: #f8f8f8;
            color: white;
            font-size: 16px;
            font-weight: 300;
        }

        header .prev {
            text-align: left;
            padding-top: 30px;
        }

        header .next {
            text-align: right;
            padding-top: 30px;
        }

        header label {
            display: block;
            color: #ddd;
            font-weight: 300;
        }

        header a {
            /*color: white;*/
        }

        header .current {
            text-align: center;
            padding: 24px;
        }

        header .current h3.title {
            padding: 0;
            margin: 0;
            color: #444;
        }

        header .current small.parent {
            margin: 10px 0;
            display: block;
            font-size: 16px;
            color: #888;
            font-weight: 300;
        }

        /* Content Section */

        section#content {
            margin: 24px 0;
            font-size: 17px;
        }

        #content code {
            padding: 3px;
            /*border: 1px solid #ddd;*/
            margin: 0 3px;
            background: #444;
            color: white;
        }

        #content pre code {
            border: none;
            background: none;
            color: #444;
            font-size: 17px;
        }

        #content h1,
        #content h2,
        #content h3,
        #content h4,
        #content h5,
        #content h6 {
            color: #337ab7;
        }

        /* Footer Section */
        footer #links {
            border-top: 1px solid #ddd;
            border-bottom: none;
            padding: 30px 0;
        }

        footer #links .prev {
            text-align: left;
        }

        footer #links .parent {
            text-align: center;
        }

        footer #links .next {
            text-align: right;
        }

        footer #links label {
            display: block;
            color: #ddd;
            font-weight: 300;
        }

        footer #copyright {
            padding: 50px;
            background: #222;
            text-align: center;
            color: #444;
        }

        footer #copyright span a {
            color: white;
        }
    </style>

</head>
