<fieldset>
    <legend><h1>Les entraineurs</h1></legend>
    
    <ul class="side-nav">
        <li>
            <?= $this->Html->link($this->Html->image('add-icone.png', ['class' => 'ajout2', 'height' => '75px', 'width' => '75px', 'title' => 'Ajouter un entraineur']).'<span class="leg">Un entraineur</span>',
                          ['controller' => 'Trainers', 'action' => 'add'],
                          ['escape' => false]) ?>
        </li>
    </ul>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de naissance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($trainers as $trainer): ?>
            <tr>
                    <td><?= $this->Html->link($trainer->id, ['controller' => 'Trainers', 'action' => 'view', $trainer->id], ['class' => 'lienhyp']) ?></td>
                    <td><?= $this->Html->link($trainer->last_name, ['controller' => 'Trainers', 'action' => 'view', $trainer->id], ['class' => 'lienhyp']) ?></td>
                    <td><?= $this->Html->link($trainer->first_name, ['controller' => 'Trainers', 'action' => 'view', $trainer->id], ['class' => 'lienhyp']) ?></td>
                    <td><?= $this->Html->link($trainer->birth_date, ['controller' => 'Trainers', 'action' => 'view', $trainer->id], ['class' => 'lienhyp']) ?></td>
                </a>    
                <td>
                    <?= $this->Html->link($this->Html->image('pen-ico.ico',['class' => 'a fa-pencil button alterar', 'height' => '20px', 'alt' => 'Modifier', 'title' => 'Modifier']),
                                                            ['controller' => 'Trainers', 'action' => 'edit', $trainer->id],
                                                            ['escape' => false]) ?>
                    <?= $this->Form->postLink($this->Html->image('trash-ico.png', ['class' => 'fa fa-trash button excluir', 'height' => '20px', 'alt' => 'Supprimer', 'title' => 'Supprimer']),
                                                            ['controller' => 'Trainers', 'action' => 'delete', $trainer->id],
                                                            ['escape' => false]); ?>
                </td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <div class="pagina">
                    <td class="li_prev" colspan="2"><?= $this->Paginator->prev('<<<') ?></td>
                    <td class="li_nb"><?= $this->Paginator->numbers() ?></td>
                    <td class="li_next" colspan ="2"><?= $this->Paginator->next('>>>', ['class' => 'pagina']) ?></td>
                </div>
            </tr>
        </tfoot>
    </table>
</fieldset>