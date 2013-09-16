<?php use_stylesheet('jobs.css') ?>

<h1>Posts List</h1>
<div id="jobs">
<table class="jobs">
  <thead>
    <tr>
      <th>Id</th>
      <th>Author</th>
      <th>Title</th>
      <th>Body</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($posts as $post): ?>
    <tr>
      <td><a href="<?php echo url_for('default/show?id='.$post->getId()) ?>"><?php echo $post->getId() ?></a></td>
      <td><?php echo $post->getAuthor() ?></td>
      <td><?php echo $post->getTitle() ?></td>
      <td><?php echo $post->getBody() ?></td>
      <td><?php echo $post->getCreatedAt() ?></td>
      <td><?php echo $post->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
  <a href="<?php echo url_for('default/new') ?>">New</a>
