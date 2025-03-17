🚀 Deploy using Ansible with GitHub Actions
This repository includes a GitHub Actions workflow to automate the deployment of an Ansible playbook to a remote server. The workflow is triggered on a push to the main branch and performs deployment using Ansible over SSH.

📂 Workflow Overview
The workflow performs the following steps:

Checkout repository – Checks out the code from the repository.
Setup SSH – Configures SSH to connect to the deployment server using a secret key.
Run Ansible Playbook – Executes the Ansible playbook on the remote server.
Send Notification on Success – Sends an email if the deployment is successful.
Send Notification on Failure – Sends an email if the deployment fails and a rollback is executed.
