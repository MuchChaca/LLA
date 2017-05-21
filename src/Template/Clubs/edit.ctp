<fieldset>
    <legend><h1>Modification du club <b><?= $club->name ?></b></h1></legend>
    
    <?= $this->Form->create($club) ?>
    <?= $this->Form->input('name', ['label' => 'Nom : ']) ?>
    <br>
    <?= $this->Form->button(__('Enregistrer')) ?>
    <?= $this->Form->end(); ?>
</fieldset>