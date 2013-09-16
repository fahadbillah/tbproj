<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $post->getId() ?></td>
    </tr>
    <tr>
      <th>Author:</th>
      <td><?php echo $post->getAuthor() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $post->getTitle() ?></td>
    </tr>
    <tr>
      <th>Body:</th>
      <td><?php echo $post->getBody() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $post->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $post->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('default/edit?id='.$post->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('default/index') ?>">List</a>
