 <!--Clubs view-->
<fieldset>
    <legend><h1>Détails du club n°<?= $club->id ?>: <?= $club->last_name." ".$club->first_name; ?></h1></legend>
    
    <ul class="side-nav">
        <li>
            <?= $this->Html->link($this->Html->image('add-icone.png', ['class' => 'ajout2', 'height' => '75px', 'width' => '75px', 'title' => 'Ajouter un club']).'<span class="leg">Ajouter un club</span>',
                          ['controller' => 'Clubs', 'action' => 'add'],
                          ['escape' => false]) ?>
        </li>
        <li>
            <?= $this->Html->link($this->Html->image('edit-icon-view.png', ['class' => 'ajout2', 'height' => '40px', 'width' => '40px', 'title' => 'Modifier le club']).'<span class="leg">Modifier</span>',
                          ['controller' => 'Clubs', 'action' => 'edit', $club->id],
                          ['escape' => false]) ?>
        </li>
        <li>
            <?= $this->Form->postLink($this->Html->image('trash-log-view.png', ['class' => 'ajout2', 'height' => '40px', 'width' => '40px', 'title' => 'Supprimer le club']).'<span class="leg">Supprimer</span>',
                          ['controller' => 'Clubs', 'action' => 'delete', $club->id],
                          ['escape' => false]) ?>
        </li>
    </ul>
    
    <table>
       <tbody class="view">
           <tr>
               <td>ID</td>
               <td class="detail"><?= $club->id ?></td>
           </tr>
           <tr>
               <td>Nom</td>
               <td class="detail"><?= $club->name ?></td>
           </tr>
       </tbody>
    </table>
    
    <fieldset>
       <legend>Ses licenciés : </legend>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date naissance</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
                <!-- Athletes -->
                <?php if(sizeof($club->athletes) > 0): ?>
                    <?php foreach($club->athletes as $athlete): ?>
                        <tr>
                            <td><?= $this->Html->link($athlete->id, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                            <td><?= $this->Html->link($athlete->last_name, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                            <td><?= $this->Html->link($athlete->first_name, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                            <td><?= $this->Html->link($athlete->birth_date, ['controller' => 'Athletes', 'action' => 'view', $athlete->id], ['class' => 'lienhyp']) ?></td>
                            <td>Athlète</td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                <!-- Trainers -->
                <?php if(sizeof($club->trainers) > 0): ?>
                    <?php foreach($club->trainers as $trainer): ?>
                        <tr>
                            <td><?= $this->Html->link($trainer->id, ['controller' => 'Trainers', 'action' => 'view', $trainer->id], ['class' => 'lienhyp']) ?></td>
                            <td><?= $this->Html->link($trainer->last_name, ['controller' => 'Trainers', 'action' => 'view', $trainer->id], ['class' => 'lienhyp']) ?></td>
                            <td><?= $this->Html->link($trainer->first_name, ['controller' => 'Trainers', 'action' => 'view', $trainer->id], ['class' => 'lienhyp']) ?></td>
                            <td><?= $this->Html->link($trainer->birth_date, ['controller' => 'Trainers', 'action' => 'view', $trainer->id], ['class' => 'lienhyp']) ?></td>
                            <td>Entraineur</td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </fieldset>
</fieldset>