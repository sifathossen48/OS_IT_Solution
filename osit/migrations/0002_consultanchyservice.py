# Generated by Django 4.2 on 2024-03-21 15:03

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('osit', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='ConsultanchyService',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('icon', models.ImageField(upload_to='icon/')),
                ('title', models.CharField(max_length=40)),
            ],
        ),
    ]
