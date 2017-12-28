pipeline {
  agent any
  stages {
      stage("Quality Gate") {
       steps {
        script {        
          withSonarQubeEnv('SonarQube') {
            sh '/var/lib/jenkins/tools/hudson.plugins.sonar.SonarRunnerInstallation/Scanner/bin/sonar-scanner'
          }
          timeout(time: 1, unit: 'HOURS') {
            script {
              def qg = waitForQualityGate()
              if (qg.status != 'OK') {
                error "Pipeline aborted due to quality gate failure: ${qg.status}"
              }
            }
          }
        }
      }
    }
  }
}