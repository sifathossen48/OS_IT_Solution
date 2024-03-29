from django.contrib import messages
from django.shortcuts import render, redirect
from django.views import View
from django.views.generic import TemplateView
from osit import forms
from osit.forms import CareerForm
from osit.models import Slider, ConsultancyService, NewsRoom, Partner, Technology, Gallery, Website_Setting, \
    Social_Media, TeamMember, Capabilities, Values, WhyChoseUs, Office, Service, Feature, CompanyQuality, \
    AboutPageSetting, WhyChoseUsPageSetting


# Create your views here.
class HomeView(TemplateView):
    template_name = 'index.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['sliders'] = Slider.objects.all()
        context['consultancyServices'] = ConsultancyService.objects.all()
        context['newsRooms'] = NewsRoom.objects.all()[:4]
        context['clients'] = Partner.objects.filter(is_only_client=True)
        context['partners'] = Partner.objects.filter(is_only_client=False)
        context['techs'] = Technology.objects.all()[:15]
        context['remainingTechs'] = Technology.objects.all()[15:]
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True)
        context['deviceService'] = Service.objects.filter(is_device_based=True)
        return context

class TechnologyView(TemplateView):
    template_name = 'technology.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['tech'] = Technology.objects.all()
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True)
        context['deviceService'] = Service.objects.filter(is_device_based=True)
        return context

class GalleryView(TemplateView):
    template_name = 'gallery.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['gallery'] = Gallery.objects.filter(internStudent=False)
        context['internStudent'] = Gallery.objects.filter(internStudent=True)
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True)
        context['deviceService'] = Service.objects.filter(is_device_based=True)
        return context
def partner(request):
    context = {
        'partner': Partner.objects.all(),
        'webinfo': Website_Setting.objects.last(),
        'social': Social_Media.objects.filter(is_active=True),
        'offices': Office.objects.all()[:3],
        'softwareService': Service.objects.filter(is_software_based=True),
        'deviceService': Service.objects.filter(is_device_based=True)

    }
    return render(request, 'partner.html', context)
def newsRoom(request):
    context = {
        'webinfo': Website_Setting.objects.last(),
        'social': Social_Media.objects.filter(is_active=True),
        'newsRooms': NewsRoom.objects.all(),
        'offices': Office.objects.all()[:3],
        'softwareService': Service.objects.filter(is_software_based=True),
        'deviceService': Service.objects.filter(is_device_based=True)
    }
    return render(request, 'newsroom.html', context)

class ContactUsView(TemplateView):
    template_name = 'contact.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True)
        context['deviceService'] = Service.objects.filter(is_device_based=True)
        return context
class ContactView(View):
    def post(self, request):
        form = forms.ContactForm(data=request.POST)
        if form.is_valid():
            form.save()
            messages.success(request,'Your message send successfully.')
        else:
            messages.error(request,'Invalid! Please try again.')
        return redirect('/contact/')
# class CareerPageView(TemplateView):
#     template_name = 'career.html'
#     def get_context_data(self, **kwargs):
#         context = super().get_context_data(**kwargs)
#         context['webinfo'] = Website_Setting.objects.last()
#         context['social'] = Social_Media.objects.filter(is_active=True)
#         context['offices'] = Office.objects.all()[:3]
#         context['softwareService'] = Service.objects.filter(is_software_based=True)
#         context['deviceService'] = Service.objects.filter(is_device_based=True)
#         return context

def career(request):
    if request.method == 'POST':
        form = CareerForm(request.POST, request.FILES)
        if form.is_valid():
            form.save()
            messages.success(request,'Data submit successfully') # Redirect to a success page
        else:
            messages.error(request,'Invalid! Please try again.')
    else:
        form = CareerForm()
    context = {
        'form': form,
        'webinfo': Website_Setting.objects.last(),
        'social': Social_Media.objects.filter(is_active=True),
        'offices': Office.objects.all()[:3],
        'softwareService': Service.objects.filter(is_software_based=True),
        'deviceService': Service.objects.filter(is_device_based=True)

    }
    return render(request, 'career.html', context)

class TeamView(TemplateView):
    template_name = 'team.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['ceo'] = TeamMember.objects.filter(is_ceo=True)
        context['management_team'] = TeamMember.objects.filter(is_management_team_member=True)
        context['development_team_leader'] = TeamMember.objects.filter(is_development_team_leader=True)
        context['development_team'] = TeamMember.objects.filter(is_development_team_member=True)
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True)
        context['deviceService'] = Service.objects.filter(is_device_based=True)
        return context

class AboutView(TemplateView):
    template_name = 'about.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['abouts'] = AboutPageSetting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['capability'] = Capabilities.objects.all()
        context['offices'] = Office.objects.all()[:3]
        context['companyQuality'] = CompanyQuality.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True)
        context['deviceService'] = Service.objects.filter(is_device_based=True)
        return context
class WhyUsView(TemplateView):
    template_name = 'whyus.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['whyus'] = WhyChoseUsPageSetting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['values'] = Values.objects.all()
        context['importantSupport'] = WhyChoseUs.objects.filter(is_important=True)
        context['support'] = WhyChoseUs.objects.filter(is_important=False)
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True)
        context['deviceService'] = Service.objects.filter(is_device_based=True)
        return context
class softwareServiceDetailView(View):
    def get(self, request, sw_id):
        sw = Service.objects.get(id=sw_id)
        context = {
            'sw': sw,
            'webinfo': Website_Setting.objects.last(),
            'social': Social_Media.objects.filter(is_active=True),
            'features': Feature.objects.all(),
            'offices': Office.objects.all()[:3],
            'softwareService': Service.objects.filter(is_software_based=True),
            'deviceService': Service.objects.filter(is_device_based=True)
        }
        return render(request, 'detail.html', context=context)

class deviceServiceDetailView(View):
    def get(self, request, dv_id):
        dv = Service.objects.get(id=dv_id)
        context = {
            'dv': dv,
            'webinfo': Website_Setting.objects.last(),
            'social': Social_Media.objects.filter(is_active=True),
            'offices': Office.objects.all()[:3],
            'softwareService': Service.objects.filter(is_software_based=True),
            'deviceService': Service.objects.filter(is_device_based=True)

        }
        return render(request, 'deviceDetail.html', context=context)