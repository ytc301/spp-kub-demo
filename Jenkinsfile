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
        script {
          withCredentials([usernamePassword(credentialsId: 'harbor', passwordVariable: 'dockerHubPassword', usernameVariable: 'dockerHubUser')]) {
            sh """
            docker logout ${harbor_addr} \
            && docker login ${harbor_addr} -u ${dockerHubUser} -p ${dockerHubPassword} \
            && docker push  harbor.hicustom.com/pub/spp-kub-demo:v1
            """
          }
        }

      }
    }
  }
  environment {
    harbor_addr = 'harbor.hicustom.com'
  }
}