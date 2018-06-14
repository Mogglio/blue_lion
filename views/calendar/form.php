<div class="columns">
    <div class="column">
        <div class="field">
            <label class="label" for="name">Titre</label>
            <div class="control">
                <input id="name" type="text" required class="input" name="name" value="<?= isset($data['name']) ? h($data['name']) : ''; ?>">
            </div>
            <?php if (isset($errors['name'])): ?>
                <small class="form-text text-muted"><?= $errors['name']; ?></small>
            <?php endif; ?>
        </div>
    </div>
    <div class="column">
        <div class="field">
            <label class="label" for="date">Date</label>
            <input id="date" type="date" required class="input" name="date" value="<?= isset($data['date']) ? h($data['date']) : ''; ?>">
            <?php if (isset($errors['date'])): ?>
                <small class="form-text text-muted"><?= $errors['date']; ?></small>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="columns">
    <div class="column">
        <div class="field">
            <label class="label" for="start">Démarrage</label>
            <input id="start" type="time" required class="input" name="start" placeholder="HH:MM" value="<?= isset($data['start']) ? h($data['start']) : ''; ?>">
            <?php if (isset($errors['start'])): ?>
                <small class="form-text text-muted"><?= $errors['start']; ?></small>
            <?php endif; ?>
        </div>
    </div>
    <div class="column">
        <div class="field">
            <label class="label" for="end">Fin</label>
            <input id="end" type="time" required class="input" name="end" placeholder="HH:MM" value="<?= isset($data['end']) ? h($data['end']) : ''; ?>">
        </div>
    </div>
</div>
<div class="field">
    <label class="label" for="description">Description</label>
    <textarea name="description" id="description" class="textarea"><?= isset($data['description']) ? h($data['description']) : ''; ?></textarea>
</div>
