pipeline {
    agent { docker { image 'php' } }
    stages {
        stage('build') {
            steps {
                php '--version'
            }
        }
    }
}