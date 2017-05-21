<fieldset>
    <legend><h1>Ajout d'un club</h1></legend>
    
    <?= $this->Form->create($club) ?>
    <?= $this->Form->input('name', ['label' => 'Nom : ']) ?>
    <br>
    <?= $this->Form->button(__('Ajouter')) ?>
    <?= $this->Form->end(); ?>
</fieldset>