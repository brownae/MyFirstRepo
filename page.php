<?php include "header.php" ?>    
<div id='wrapper'>
<main id="page">
    
  
    <h2>Page.php </h2>
    <p>You can test-drive your CSS by viewing the source of this page and copying it into a new HTML file. 

    <p>Uncomment the &lt;link&gt; tag in the head, and link this page to your CSS style sheet to test whether your CSS selectors are global. Since the elements on this page are not nested inside your container elements, they will be unstyled if your selectors are overly-specific.</p>

    <p>Keep in mind that if your stylesheet uses CSS resets (which it should), once you link this page to your stylesheet the browser-default margins and padding will go away, and you will need to add your own margin and padding values back in if you haven't done so already.</p> 

    <h2>H2 Include a variety of HTML elements</h2>
    <h3>H3 Nested List 1: ol ul</h3>
    <ol>
    <li>List Item 1
        <ul>
        <li>Nested List Item 1. Are your nested lists properly indented?</li>
        <li>Some List Items will break to more than one line of text. Be sure to add some margin-bottom to your list items to create vertical space between them. This makes it much easier to distinguish two different list items from one item that breaks onto two lines.</li>
        <li>Nested List Item 3</li>
        </ul>
    </li>
    <li>List Item 2</li>
    <li>List Item 3</li>
    </ol>

    <h3>H3 Nested List 2: ul ol</h3>
    <ul>
    <li>List Item 1
        <ol>
        <li>Nested List Item 1. Are your nested lists properly indented?</li>
        <li>Nested List Item 2</li>
        <li>Nested List Item 3</li>
        </ol>
    </li>
    <li>List Item 2</li>
    <li>List Item 3</li>
    </ul>


    <h2>H2 Paragraph</h2>
    <h3>H3 Heading 3</h3>
    <p>Your test HTML must have multiple paragraphs, so you can check to see whether you've added margin between them to separate one paragraph from the next. It's also a really good idea to have a mix of lists and paragraphs, as each list (ul, ol, and dl) should have the same margin underneath it as your paragraphs do.</p>
    <p>It's always a good idea to <a href="javascript:;">test your link styles</a>. If a link that's not nested inside a content div or sidebar displays with browser default link styles, it means your link CSS selectors are too specific. Write global link styles first, then override with more specific selectors as needed.</p>
    <p>Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

    <blockquote>This is a blockquote. It should be styled differently from other text on the page.</blockquote>

    <p>Lorem ipsum dolor sit amet,  <a href="javascript:;">test link</a> adipiscing elit. Nullam dignissim convallis est. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>
    <h3>Heading 3</h3>
    <h4>Heading 4</h4>
    <p>It's a good idea to test out how a headline followed by a sub-head looks. Sometimes the white space between them needs to be adjusted.</p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>

    <ul>
        <li>List Item 1. <strong>Do your unordered lists have bullets?</strong></li>
        <li>List Item 2. Are the bullets properly indented? I like to <strong>give unordered lists a margin-left of 1.25em.</strong> This makes the bullets align with the left edges of other content, no matter what font-size is used.</li>
        <li>Some List Items will break to more than one line of text. Be sure to add some margin-bottom to your list items to create vertical space between them. This makes it much easier to distinguish two different list items from one item that breaks onto two lines.</li>
        <li>Be sure to add white space below lists, so they don't get too close to the elements that follow them on the page.</li>
    </ul>

    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>

    <ol>
        <li>List Item 1. <strong>Do your ordered lists have numbers?</strong></li>
        <li>List Item 2. Are the numbers properly indented? I like to <strong>give ordered lists a margin-left of 1.75em.</strong> This makes the bullets align with the left edges of other content, no matter what font-size is used.</li>
        <li>It's a good idea to test an ordered list with at least 10 items, so you can be sure your left indents work with two-digit numbers.</li>
        <li>Be sure to add white space below lists, so they don't get too close to the elements that follow them on the page.</li>
        <li>List Item 5</li>
        <li>List Item 6</li>
        <li>List Item 7</li>
        <li>List Item 8</li>
        <li>List Item 9</li>
        <li>List Item 10</li>
        <li>List Item 11</li>
        <li>List Item 12</li>
    </ol>

    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>

    <dl>
        <dt>Definition List</dt>
        <dd>Does your definition term &lt;dt&gt; stand out from the description  &lt;dd&gt; ? (I often make them bold, but this is optional and depends on your design.)</dd>
        <dd>Do your definition lists have hanging indents?</dd>
        <dd>Are the indents properly aligned? I like to <strong>give &lt;dd&gt; tags a margin-left of 1.25em.</strong> This makes them align nicely with the left edges of unordered list text.</dd>
        <dd>Some List Items will break to more than one line of text. Be sure to add some margin-bottom to your list items to create vertical space between them. This makes it much easier to distinguish two different list items from one item that breaks onto two lines.</dd>
        <dd>Be sure to add white space below lists, so they don't get too close to the elements that follow them on the page.</dd>
    </dl>

    <p>Praesent mattis, massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. Maecenas ornare tortor. Donec sed tellus eget sapien fringilla nonummy. Mauris a ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc. Morbi imperdiet augue quis tellus.</p>

    <p><a href="javascript:;" title="test link">Test link</a>. <strong>Strong text.</strong> <em>Emphasized text.</em></p>
   
</main>

<sidebar id="primary">
    <h4>Recent Blog Post</h4>
    <img src="images/twitter-logo.jpg" alt="test img">
    <p><strong>Blog Post Title</strong></p>
    <p>Author, Sept 20 2016</p>

</sidebar>
</div>
<?php include "footer.php" ?>