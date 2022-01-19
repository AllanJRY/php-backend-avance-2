<?php

/**
 * Permet d'enregistrer dans un fichier ou de charger depuis un fichier, l'état d'un objet (Attention que d'un seul objet !).
 */
class Database {
    private const DB_FOLDER = 'db/';
    private const DB_FILE_EXT = '.json';

    /**
     * Sauvegarde l'état d'un objet dans un fichier texte.
     * Le nom du fichier est nommé d'après le nom de classe de l'objet.
     *
     * @param \JsonConvertible $entity
     * @return void
     */
    public function save(JsonConvertible $entity) {
        if (!file_exists(self::DB_FOLDER)) {
            mkdir(self::DB_FOLDER);
        }

        file_put_contents($this->buildPath(get_class($entity)), $entity->toJson());
    }

    /**
     * Charge un objet depuis un fichier, selon le nom de classe donné.
     *
     * @param string $className
     * @return \JsonConvertible|null
     */
    public function load(string $className): ?JsonConvertible
    {
        $entity = null;

        if (class_exists($className)) {
            $entityObject = new $className();

            if ($entityObject instanceof JsonConvertible) {
                $entity = $entityObject::fromJson(file_get_contents($this->buildPath($className)));
            }
        }
        return $entity;
    }

    /**
     * Construit le chemin vers le fichier recherché.
     *
     * @param string $className
     * @return string
     */
    private function buildPath(string $className): string {
        return self::DB_FOLDER.$className.self::DB_FILE_EXT;
    }
}
