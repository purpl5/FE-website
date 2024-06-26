<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $article = new ArticleCreator();
    $error = $article->sendArticle($_POST['title'], $_POST['titleEn'], $_POST['article'], $_POST['articleEn'], $_POST['category'], $_POST['categoryEn'], $_POST['style'], $_POST['madeBy'], $_POST['link'], $_POST['linkCreator'], $_POST['date'], $_POST['thumbnail']);
}

?>

<head>
    <link rel="stylesheet" href="/css/article-creator.css">

    <script defer src="/js/formBaseFunction.js"></script>
    <script defer src="/admin/js/formArticleCreator.js"></script>
    <link rel="stylesheet" href="/admin/css/article-creator.css">
</head>

<body>
    <section class ="article-creator">
        <h1>Article Creator</h1>

        <form id="form-article-creator" action="" method="post">
            <label for="title"><?php echo $trad['admin']['article-creator']['title'] ?> : </label>
            <input type="text" id="title" name="title">

            <label for="titleEn"><?php echo $trad['admin']['article-creator']['titleEn'] ?> : </label>
            <input type="text" id="titleEn" name="titleEn">

            <label for="article"><?php echo $trad['admin']['article-creator']['article'] ?> : </label>
            <textarea id="article" name="article"></textarea>

            <label for="articleEn"><?php echo $trad['admin']['article-creator']['articleEn'] ?> : </label>
            <textarea id="articleEn" name="articleEn"></textarea>

            <label for="category"><?php echo $trad['admin']['article-creator']['category'] ?> : </label>
            <input type="text" id="category" name="category">

            <label for="categoryEn"><?php echo $trad['admin']['article-creator']['categoryEn'] ?> : </label>
            <input type="text" id="categoryEn" name="categoryEn">

            <label for="style"><?php echo $trad['admin']['article-creator']['style'] ?> : </label>
            <input type="text" id="style" name="style">

            <label for="madeBy"><?php echo $trad['admin']['article-creator']['madeBy'] ?> : </label>
            <input type="text" id="madeBy" name="madeBy">

            <label for="link"><?php echo $trad['admin']['article-creator']['link'] ?> : </label>
            <input type="text" id="link" name="link">

            <label for="linkCreator"><?php echo $trad['admin']['article-creator']['linkCreator'] ?> : </label>
            <input type="text" id="linkCreator" name="linkCreator">

            <label for="date"><?php echo $trad['admin']['article-creator']['date'] ?> : </label>
            <input type="date" id="date" name="date">

            <label for="thumbnail"><?php echo $trad['admin']['article-creator']['thumbnail'] ?> : </label>
            <input type="file" id="thumbnail" name="thumbnail">

            <button type="submit" name="submit"><p><?php echo $trad['admin']['article-creator']['create'] ?></p></button>
        </form>
    </section>
</body>