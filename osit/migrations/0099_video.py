# Generated by Django 4.2 on 2024-05-06 05:09

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('osit', '0098_alter_service_desc'),
    ]

    operations = [
        migrations.CreateModel(
            name='Video',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('title', models.CharField(max_length=30)),
                ('link', models.CharField(max_length=200)),
            ],
        ),
    ]
