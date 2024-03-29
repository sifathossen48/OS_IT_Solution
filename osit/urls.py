from django.urls import path
from . import views

urlpatterns = [
    path('', views.HomeView.as_view(), name='home'),
    path('about', views.AboutView.as_view(), name='about-us'),
    path('technology/', views.TechnologyView.as_view(), name='technology'),
    path('gallery/', views.GalleryView.as_view(), name='gallery'),
    path('partner/', views.partner, name='partner'),
    path('newsroom/', views.newsRoom, name='newsroom'),
    path('contact/', views.ContactUsView.as_view(), name='contact-us'),
    path("contact", views.ContactView.as_view(), name='contact'),
    path('career/', views.career, name='career'),
    path('team/', views.TeamView.as_view(), name='team'),
    path('why_us/', views.WhyUsView.as_view(), name='why-us'),
    path('softwareService/details/<int:sw_id>', views.softwareServiceDetailView.as_view(), name='softwareService'),
    path('deviceService/details/<int:dv_id>', views.deviceServiceDetailView.as_view(), name='deviceService')

]