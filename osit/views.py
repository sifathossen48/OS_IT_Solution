from django.contrib import messages
from django.shortcuts import render, redirect, get_object_or_404
from django.views import View
from django.views.generic import TemplateView
from osit import forms
from osit.forms import CareerForm
from osit.models import Award_And_Certificate, Membership, Slider, ConsultancyService, NewsRoom, Partner, Technology, Gallery, Video, Website_Setting, \
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
        context['MOU_SignIn'] = NewsRoom.objects.filter(MOU_SignIn_Activity=True).order_by('-id')[:4] 
        context['clients'] = Partner.objects.filter(is_only_client=True)
        context['partners'] = Partner.objects.filter(is_only_client=False)
        context['techs'] = Technology.objects.all()[:15]
        context['remainingTechs'] = Technology.objects.all()[15:]
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True).order_by('-id')
        context['deviceService'] = Service.objects.filter(is_device_based=True).order_by('-id')
        context['membership'] = Membership.objects.all()
        return context

class TechnologyView(TemplateView):
    template_name = 'technology.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['tech'] = Technology.objects.all()
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True).order_by('-id')
        context['deviceService'] = Service.objects.filter(is_device_based=True).order_by('-id')
        context['membership'] = Membership.objects.all()
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
        context['softwareService'] = Service.objects.filter(is_software_based=True).order_by('-id')
        context['deviceService'] = Service.objects.filter(is_device_based=True).order_by('-id')
        context['membership'] = Membership.objects.all()
        return context
def partner(request):
    context = {
        'partner': Partner.objects.all(),
        'webinfo': Website_Setting.objects.last(),
        'social': Social_Media.objects.filter(is_active=True),
        'offices': Office.objects.all()[:3],
        'softwareService': Service.objects.filter(is_software_based=True).order_by('-id'),
        'deviceService': Service.objects.filter(is_device_based=True).order_by('-id'),
        'membership' : Membership.objects.all()

    }
    return render(request, 'partner.html', context)
def newsRoom(request):
    context = {
        'webinfo': Website_Setting.objects.last(),
        'social': Social_Media.objects.filter(is_active=True),
        'hiring': NewsRoom.objects.filter(hiring_Activity=True),
        'MOU_SignIn': NewsRoom.objects.filter(MOU_SignIn_Activity=True),
        'Nasa_App': NewsRoom.objects.filter(Nasa_App_Activity=True),
        'Team_Activity': NewsRoom.objects.filter(Team_Activity=True),
        'Job_Fair': NewsRoom.objects.filter(Job_Fair_Activity=True),
        'Support_Activity': NewsRoom.objects.filter(Support_Activity=True),
        'offices': Office.objects.all()[:3],
        'softwareService': Service.objects.filter(is_software_based=True).order_by('-id'),
        'deviceService': Service.objects.filter(is_device_based=True).order_by('-id'),
        'membership' : Membership.objects.all()
    }
    return render(request, 'newsroom.html', context)

class ContactUsView(TemplateView):
    template_name = 'contact.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True).order_by('-id')
        context['deviceService'] = Service.objects.filter(is_device_based=True).order_by('-id')
        context['membership'] = Membership.objects.all()
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
        'softwareService': Service.objects.filter(is_software_based=True).order_by('-id'),
        'deviceService': Service.objects.filter(is_device_based=True).order_by('-id'),
        'membership' : Membership.objects.all()

    }
    return render(request, 'career.html', context)

class TeamView(TemplateView):
    template_name = 'team.html'
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['webinfo'] = Website_Setting.objects.last()
        context['social'] = Social_Media.objects.filter(is_active=True)
        context['ceo'] = TeamMember.objects.filter(is_ceo=True, is_draft=False)
        context['management_team'] = TeamMember.objects.filter(is_management_team_member=True, is_draft=False)
        context['development_team_leader'] = TeamMember.objects.filter(is_development_team_leader=True, is_draft=False)
        context['development_team'] = TeamMember.objects.filter(is_development_team_member=True, is_draft=False)
        context['ui_team'] = TeamMember.objects.filter(is_ui_team_member=True, is_draft=False)
        context['digital_marketing_team'] = TeamMember.objects.filter(is_digital_marketing_team_member=True, is_draft=False)
        context['hr_team'] = TeamMember.objects.filter(is_hr_team_member=True, is_draft=False)
        context['offices'] = Office.objects.all()[:3]
        context['softwareService'] = Service.objects.filter(is_software_based=True).order_by('-id')
        context['deviceService'] = Service.objects.filter(is_device_based=True).order_by('-id')
        context['membership'] = Membership.objects.all()
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
        context['softwareService'] = Service.objects.filter(is_software_based=True).order_by('-id')
        context['deviceService'] = Service.objects.filter(is_device_based=True).order_by('-id')
        context['membership'] = Membership.objects.all()
        context['ac'] = Award_And_Certificate.objects.all()
        context['videos'] = Video.objects.all()
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
        context['softwareService'] = Service.objects.filter(is_software_based=True).order_by('-id')
        context['deviceService'] = Service.objects.filter(is_device_based=True).order_by('-id')
        context['membership'] = Membership.objects.all()
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
            'softwareService': Service.objects.filter(is_software_based=True).order_by('-id'),
            'deviceService': Service.objects.filter(is_device_based=True).order_by('-id'),
            'membership': Membership.objects.all()
        }
        return render(request, 'detail.html', context=context)

    # def post(self, request, sw_id):
    #     service = get_object_or_404(Service, pk=sw_id)
    #
    #     # Check which image field is being submitted
    #     image_field = None
    #     for field_name in ['image', 'image_2', 'image_3', 'image_4']:
    #         if field_name in request.FILES:
    #             image_field = field_name
    #             break
    #
    #     if image_field:
    #         # Assign the uploaded file to the corresponding image field
    #         setattr(service, image_field, request.FILES[image_field])
    #         service.save()
    #         return render('details.html', {'sw_id': sw_id})

class deviceServiceDetailView(View):
    def get(self, request, dv_id):
        dv = Service.objects.get(id=dv_id)
        context = {
            'dv': dv,
            'webinfo': Website_Setting.objects.last(),
            'social': Social_Media.objects.filter(is_active=True),
            'offices': Office.objects.all()[:3],
            'softwareService': Service.objects.filter(is_software_based=True).order_by('-id'),
            'deviceService': Service.objects.filter(is_device_based=True).order_by('-id'),
            'membership': Membership.objects.all()
        }
        return render(request, 'deviceDetail.html', context=context)


