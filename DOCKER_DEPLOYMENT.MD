# OHCMS Docker Deployment Guide

## Prerequisites
- Docker installed on your system
- Docker Compose installed
- Git (to clone the repository)

## Quick Start

### 1. Clone the Repository
```bash
git clone https://github.com/samraatc/Our_Health-_and_Care_Menegment_Syatem-OHCMS-project.git
cd Our_Health-_and_Care_Menegment_Syatem-OHCMS-project
```

### 2. Add Docker Files
Copy the following files to your project root:
- `Dockerfile`
- `docker-compose.yml`
- `config.php` (updated database configuration)
- `.dockerignore`

### 3. Update Your Database Configuration
Replace your existing database configuration file with the new `config.php` that includes Docker-compatible settings.

### 4. Build and Run the Application
```bash
# Build and start all services
docker-compose up -d --build

# Check if services are running
docker-compose ps
```

### 5. Access the Application
- **Main Application**: http://localhost:8080
- **Admin Login**: http://localhost:8001/_index.php
- **phpMyAdmin**: http://localhost:8081

## Default Login Credentials
- **Administrator**: admin@ohcms.com / admin
- **Department Head**: departmentalhead@ohcms.com / departmentalhead  
- **Employee**: employee@ohcms.com / employee

## Services Overview

### Web Application (ohcms_web)
- **Container**: PHP 8.1 with Apache
- **Port**: 8080 (external) → 80 (internal)
- **Volume**: Current directory mounted to /var/www/html

### Database (ohcms_db)
- **Container**: MySQL 8.0
- **Port**: 3306 (external) → 3306 (internal)
- **Database**: hospital
- **Root Password**: hospital123
- **Data**: Persistent storage via Docker volume

### phpMyAdmin (ohcms_phpmyadmin)
- **Container**: phpMyAdmin for database management
- **Port**: 8081 (external) → 80 (internal)
- **Access**: admin via root/hospital123

## Common Commands

### Start Services
```bash
docker-compose up -d
```

### Stop Services
```bash
docker-compose down
```

### View Logs
```bash
# All services
docker-compose logs

# Specific service
docker-compose logs web
docker-compose logs db
```

### Rebuild Application
```bash
docker-compose down
docker-compose up -d --build
```

### Database Management
```bash
# Access MySQL directly
docker exec -it ohcms_db mysql -u root -p

# Backup database
docker exec ohcms_db mysqldump -u root -phospital123 hospital > backup.sql

# Restore database
docker exec -i ohcms_db mysql -u root -phospital123 hospital < backup.sql
```

## Troubleshooting

### Common Issues

1. **Port Already in Use**
   ```bash
   # Check what's using the port
   lsof -i :8080

   # Change ports in docker-compose.yml if needed
   ```

2. **Database Connection Issues**
   - Ensure database service is running: `docker-compose ps`
   - Check database logs: `docker-compose logs db`
   - Verify database configuration in config.php

3. **Permission Issues**
   ```bash
   # Fix file permissions
   sudo chown -R $USER:$USER .
   ```

4. **Database Not Initialized**
   ```bash
   # Remove database volume and restart
   docker-compose down -v
   docker-compose up -d
   ```

### File Structure After Setup
```
project-root/
├── Admin/
├── DepartmentHead/
├── Employee/
├── Laboratory/
├── Pharmacy/
├── RegistrationDesk/
├── assets/
├── database/
│   └── hospital.sql
├── img/
├── index.php
├── _index.php
├── config.php          # Updated for Docker
├── Dockerfile          # New
├── docker-compose.yml  # New
├── .dockerignore       # New
└── README.md
```

## Production Considerations

1. **Security**
   - Change default database passwords
   - Remove phpMyAdmin in production
   - Use environment variables for sensitive data
   - Enable HTTPS

2. **Performance**
   - Use production-ready PHP configuration
   - Optimize MySQL settings
   - Implement caching mechanisms

3. **Backup Strategy**
   - Regular database backups
   - Volume backups for persistent data
   - Application code versioning

## Support
For issues related to:
- **Docker setup**: Check Docker and Docker Compose documentation
- **Application bugs**: Refer to the original repository
- **Database issues**: Check MySQL 8.0 documentation
