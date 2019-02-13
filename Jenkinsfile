pipeline {
  agent {
    node {
      label 'jenkins-jnlp-java'
    }

  }
  stages {
    stage('build spp') {
      steps {
        sh 'docker build -t harbor.hicustom.com/pub/spp-kub-demo:v1 .'
      }
    }
    stage('push spp') {
      steps {
        sh '''docker login -u pstest -p Test1234567890  harbor.hicustom.com
docker push  harbor.hicustom.com/pub/spp-kub-demo:v1'''
      }
    }
  }
}